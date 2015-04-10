<h1>Index</h1>

<p>
This is the main page welcome!
</p>

<table>
<?php
    foreach($this->contentList as $key => $value) {
        echo '<tr>';
        echo '<td>' . $value['title'] . '</td>';
        echo '<td>' . $value['content'] . '</td>';

        echo '</tr>';
    }
?>
</table>
