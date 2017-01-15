<?php

class Pager {

    private $offset = 0;

    private $page = 1;

    function __construct($conf) {
        $page = (int)$conf["page"];

        $this->page = 1 > $page ? 1 : $page;

        $this->perPage = (int)$conf["perPage"];

        $this->allCount = (int)$conf["all"];


        $this->pages = $this->getPages();
        $this->current  = $this->getCurrent();
        $this->hasNext = $this->hasNext();
        $this->hasPrevious = $this->hasPrevious();
        $this->offset = $this->getOffset();
    }

    function getOffset() {
        return $this->perPage * ($this->page - 1);
    }

    function getPages() {
        $all = $this->allCount;
        $perPage = $this->perPage;

        return (0 < ($all % $perPage)) ? ~~($all / $perPage) + 1 : ~~($all / $perPage);
    }

    function viewing() {
        $offset = $this->getOffset();
        $perPage = $this->perPage;

        return ($offset + 1) . " to " . ($offset + $perPage);
    }

    function getCurrent() {
        return $this->page;
    }

    function hasNext() {
        return $this->getPages() > $this->page;
    }

    function hasPrevious() {
        return 2 <= $this->page;
    }
}

function escape($str) {
    return htmlspecialchars($str, ENT_QUOTES, "UTF-8");
}

function csv2KeyValuesLine($line) {
    $resutls = array();
    $tmp = explode(",", trim($line));
    $key = "";

    for ($i = 0; $i < count($tmp); $i++) {
        if (0 === $i) {
            $key = trim($tmp[$i]);
        } else {
            array_push($resutls, trim($tmp[$i]));
        }
    }

    return array($key, $resutls);
}

function csv2KeyValues($csv) {
    $result = array();
    $handle = fopen($csv, 'r');

    if ($handle) {

        while (($buffer = fgets($handle, 4096)) !== false) {
            mb_convert_variables("utf-8", "sjis-win", $buffer);
            $kv = csv2KeyValuesLine($buffer);
            $result[$kv[0]] = $kv[1];
        }

        if (!feof($handle)) {
            echo "Error: unexpected fgets() fail\n";
        }
        fclose($handle);
    }

    return $result;
}

function parseCSVString($chart)
{
    $result = array();
    $i = 0;
    $j = 0;
    $temp = preg_split("/\n/", $chart);

    for ($i = 0; $i < count($temp); $i++) {
        if ("" !== trim($temp[$i])) {
            $r2 = array();
            $t2 = explode(",", trim($temp[$i]));

            for ($j = 0; $j < count($t2); $j++) {
                array_push($r2, trim($t2[$j]));
            }
            array_push($result, $r2);
        }
    }

    return $result;
}

function getChart($data, $maxLength = null)
{
    $html = "";

    $lines = parseCSVString($data);
    $t = "";

    for ($j = 0; $j < count($lines); $j++) {
        $line = $lines[$j];

        $html .= "<tr>";
        $max = $maxLength ? $maxLength : count($line);

        for ($k = 0; $k < $max; $k++) {
            $el = $k % 2 == 0 ? "th" : "td";
            $t = trim($line[$k]);

            switch ($t) {
                case "-":
                    $html .= sprintf('<%1$s><span>&nbsp;</span></%1$s>', $el, escape($t));
                    break;
                case "含む":
                    $html .= sprintf('<%1$s><span>●</span></%1$s>', $el, escape($t));
                    break;
                default:
                    $html .= sprintf('<%1$s><span>%2$s</span></%1$s>', $el, escape($t));
            }
        }

        $html .= "</tr>\n";
    }

    return $html;
}

function getRelatedLinks($entryId)
{
    global $mt;

    $items = array();
    $entry = $mt->db()->fetch_entry($entryId);
    $fields = $entry->entry_mt_entry_meta;

    $hasRelatedItems = false;
    $relatedItems = array();

    for ($i = 0; $i < count($fields); $i++) {
        if ("field.product_related" === $fields[$i]->entry_meta_type) {
            $hasRelatedItems = true;
            $relatedItems = explode(",", $fields[$i]->entry_meta_vchar_idx);
        }
    }

    for ($i = 0; $i < count($relatedItems); $i++) {
        $ent = $mt->db()->fetch_entry(trim($relatedItems[$i]));
        $entLink = $mt->db()->entry_link(trim($relatedItems[$i]));

        if (5 == $ent->{entry_blog_id} && 2 == $ent->{entry_status}) {
            array_push($items,
                sprintf('<li class="related-%3$d"><a href="%1$s">%2$s</a></li>',
                    escape($entLink),
                    escape($ent->{entry_title}),
                    $ent->entry_id
                )
            );
        }
    }

    return array(
        "hasRelatedItems" => $hasRelatedItems,
        "items" => $items
    );
}

function getDetail($date = "", $lastdate = "", $detail)
{
    $items = array();
    $html = array();
    $data = parseCSVString($detail);
    $isHanbai = false;
    $isShubai = false;
    $today = new DateTime();
    $today->setTime(0, 0, 0);

    if ("" !== $date) {
        $matches = array();
        $template = '<li>発売日：%1$d年%2$d月%3$d日</li>';
        preg_match("/([0-9]+)-([0-9]+)-([0-9]+)/", $date, $matches);
        if (4 === count($matches)) {
            array_push($items, sprintf($template, (int)$matches[1], (int)$matches[2], (int)$matches[3]));
        }
    }

    if ("" !== $lastdate) {
        $isShubai = true;
        $matches = array();
        $template = '<li>終売日：%1$d年%2$d月%3$d日%4$s</li>';
        preg_match("/([0-9]+)-([0-9]+)-([0-9]+)/", $lastdate, $matches);
        $d = new DateTime();
        $d->setDate((int)$matches[1], (int)$matches[2], (int)$matches[3])->setTime(0, 0, 0);

        if ($today->format('U') > $d->format('U')) {
            $isHanbai = true;
        }

        if (4 === count($matches)) {
            array_push($items, sprintf($template,
                (int)$matches[1],
                (int)$matches[2],
                (int)$matches[3],
                $isHanbai ? '<span class="snacks-main_detail-lastdate">販売終了</span>' : ''
            ));
        }
    }

    for ($i = 0; $i < count($data); $i++) {
        $temp = "";

        for ($j = 0; $j < count($data[$i]); $j++) {
            $temp .= $data[$i][$j];
        }

        array_push($items, sprintf('<li>%1$s</li>', $temp));
    }

    array_push($html, '<ul>');

    for ($i = 0; $i < count($items); $i++) {
        if ($i === (int)(count($items) / 2) + 1) {
            array_push($html, "</ul><ul>");
        }

        array_push($html, $items[$i]);
    }

    array_push($html, '</ul>');

    return array(
        "isShubai" => $isShubai,
        "html" => "\n" . implode("\n", $html) . "\n"
    );
}

function getEntries($page)
{
    global $mt;
    global $blog_id;

    $items = array();

    $offset = 20 * ((int)$page - 1);

    $lastn = 20;

    $template = <<<'EOL'
<li id="item-%5$d" class="snacks-item" %2$s %6$s><a href="%1$s">
  <div>
    <figure><img src="%3$s"/></figure>
    <h1>%4$s</h1><span class="snacks-item_mroe">詳しく見る</span>
  </div></a></li>
EOL;

    $entries = $mt->db()->fetch_entries(array(
        'blog_id' => $blog_id,
        'offset' => $offset,
        'lastn' => $lastn
    ));

    $pager = new Pager(array(
        "page" => (int)$page,
        "perPage" => $lastn,
        "all" => $mt->db()->blog_entry_count(array("blog_id" => $blog_id))
    ));

    for ($i = 0; $i < count($entries); $i++) {
        $entry = $entries[$i];

        if (isset($entry->{'entry_field.product_item_link'}) && "" !== $entry->{'entry_field.product_item_link'}) {
            $link = $entry->{'entry_field.product_item_link'};
        } else {
            $link = $mt->db()->entry_link($entry->{'id'});
        }

        $date = isset($entry->{'entry_field.product_date'}) ?
            sprintf('data-date="%1$s"', escape(str_replace(" 00:00:00", "", $entry->{'entry_field.product_date'}))) :
            "";

        $last = isset($entry->{'entry_field.product_lastdate'}) ?
            sprintf('data-lastdate="%1$s"', escape(str_replace(" 00:00:00", "", $entry->{'entry_field.product_lastdate'}))) :
            "";

        array_push($items, sprintf($template,
            escape($link),
            $date,
            escape(preg_replace('/^.* href="([^"]*)".*$/', "$1", $entry->{'entry_field.product_list_image'})),
            $entry->{'entry_field.product_list_name'},
            $entry->entry_id,
            $last
        ));
    }

    return array(
        "pager" => $pager,
        "html" => implode("\n", $items) . "\n"
    );
}

function renderMore($pager)
{
    $next = $pager->current + 1;
    $template = '<div class="snacks-newsnack-more"><a href="%1$s"><i></i><span>もっとみる</span></a></div>' . "\n";

    $btn = sprintf($template, "index_{$next}.html");

    if ($pager->hasNext) {
        echo $btn;
    }

    return $pager->hasNext;
}

function getRelatedRecipeLinks($entryId)
{
    global $mt;

    $items = array();
    $entry = $mt->db()->fetch_entry($entryId);
    $template =<<<'EOL'
<li class="%6$s"><a href="%1$s">
<div class="img01"><img src="%2$s" alt="%3$s"/><span>%4$s</span></div>
<p>%3$s</p>
</a></li>
EOL;

    $hasRelatedItems = false;
    $relatedItems = array();

    if (isset($entry->{'entry_field.special_related'}) && "" !== $entry->{'entry_field.special_related'}) {
        $field = $entry->{'entry_field.special_related'};
        $hasRelatedItems = true;
        $relatedItems = explode(",", $field);
    }

    for ($i = 0; $i < count($relatedItems); $i++) {
        $ent = $mt->db()->fetch_entry(trim($relatedItems[$i]));
        $entLink = $mt->db()->entry_link(trim($relatedItems[$i]));
        $entCat = $ent->category() ? $ent->category()->{'category_label'} : "";

        if (2 == (int)$ent->{'entry_status'}) {
            array_push($items,
                sprintf($template,
                    escape($entLink),
                    escape(preg_replace('/^.* href="([^"]*)".*$/', "$1", $ent->{'entry_field.special_image'})),
//                    escape(preg_replace('/<br>/g', '', $ent->{'entry_title'})),
                    escape(preg_replace('/(<[\s]*br[\s\/]*>)/', '', $ent->{'entry_title'})),
                    escape($entCat),
                    escape(preg_replace('/^([0-9]+)-([0-9]+)-([0-9]+).*$/', '$1.$2.$3', $ent->{'entry_field.special_date'})),
                    escape("is-category-" . $ent->category()->{'category_basename'})
                )
            );
        }
    }

    return array(
        "hasRelatedItems" => $hasRelatedItems,
        "items" => $items
    );
}

function getEntriesSpecial($page)
{
    global $mt;
    global $blog_id;

    $items = array();

    $offset = 10 * ((int)$page - 1);

    $lastn = 10;

    $template = <<<'EOL'
<li id="item-%8$d" class="%1$s"><a href="%2$s">
    <figure><img src="%3$s" alt=""/></figure><div class="category">%5$s</div>
    <div class="info">
      <p class="title">%4$s</p>
      <p class="desc">%6$s</p>
    </div>
  </a></li>
EOL;

    $entries = $mt->db()->fetch_entries(array(
        'blog_id' => $blog_id,
        'offset' => $offset,
        'lastn' => $lastn
    ));

    $pager = new Pager(array(
        "page" => (int)$page,
        "perPage" => $lastn,
        "all" => $mt->db()->blog_entry_count(array("blog_id" => $blog_id))
    ));

    for ($i = 0; $i < count($entries); $i++) {
        $entry = $entries[$i];

        $link = $mt->db()->entry_link($entry->{'id'});
        $entCat = $entry->category() ? $entry->category()->{'category_label'} : "";
        $entCls = "is-category-" . $entry->category()->{'category_basename'};
        $entImg = preg_replace('/^.* href="([^"]*)".*$/', "$1", $entry->{'entry_field.special_image'});
        $entDate = preg_replace('/^([0-9]+)-([0-9]+)-([0-9]+).*$/', '$1.$2.$3', $entry->{'entry_field.special_date'});

        if (1 === $pager->current && 0 === $i) {
            $entCls .= " is-first";
        }

        array_push($items, sprintf($template,
            escape($entCls),
            escape($link),
            escape($entImg),
            $entry->title,
            escape($entCat),
            preg_replace('/\n/', '', nl2br(escape($entry->excerpt))),
            escape($entDate),
            $entry->{'id'}
        ));
    }

    return array(
        "pager" => $pager,
        "html" => implode("\n", $items) . "\n"
    );
}

function renderMoreSpecial($pager)
{
    $next = $pager->current + 1;

    $template = <<<'EOL'
<p class="btn_more01">
  <a href="#">
    <span class="pc"><img src="/special/img/btn_more.png" alt="もっと見る"/></span>
    <span class="sp"><img src="/special/img/btn_more_sp.png" alt="もっと見る"/></span>
  </a>
</p>
EOL;

    $btn = sprintf($template, "index_{$next}.html");

    if ($pager->hasNext) {
        echo $btn;
    }

    return $pager->hasNext;
}

function getEntriesToppanel($category)
{
    global $mt;
    global $blog_id;

    $csv = csv2KeyValues("./tags.csv");
    $items = array();
    $args = array(
        'blog_id' => $blog_id,
        'lastn' => 12
    );

    switch ($category) {
        case "doritos":
            $args["category"] = "ドリトス";
            break;
        case "mike":
            $args["category"] = "マイクポップコーン";
            break;
        case "cheetos":
            $args["category"] = "チートス";
            break;
        default:
    }

    $entries = $mt->db()->fetch_entries($args);

    for ($i = 0; $i < count($entries); $i++) {
        $entry = $entries[$i];
        $entCat = $entry->category()->category_basename;
        $entImg = preg_replace('/^.* href="([^"]*)".*$/', "$1", $entry->{'entry_field.toppanel_image'});
        $tags = $mt->db()->fetch_entry_tags(array('entry_id' => $entry->entry_id));
        $entTags = array();

        for ($j = 0; $j < count($tags); $j++) {
            $tag = $tags[$j]->{"tag_name"};
            array_push($entTags, array(
                "label" => $tag,
                "url" => isset($csv[$tag][0]) ? $csv[$tag][0] : ""
            ));
        }

        array_push($items, array(
            "category" => escape($entCat),
            "title" => escape($entry->title),
            "url" => escape($entry->{'entry_field.toppanel_link'}),
            "img_src" => escape($entImg),
            "date" => escape(str_replace("00:00:00", "", $entry->{'entry_field.toppanel_date'})),
            "tags" => $entTags
        ));
    }

    return $items;
}
