<?php $class='test'; $color ='blue'; $id ='item_test'; ?>
<?php $attribs = ['id'=> $id, 'class' => $class, 'name' => 'data[]']; ?>
<ul style="list-style: none;">
    <!-- A dynamic list item; -->
        <li style="color: <?= $color ?>;padding 10px;">
        <!-- A dynamic form input tag: -->
        Dynamic: <input id='cb_<?= $id?>' class='<?= $class ?>' />
    </li>
    <li style="color: <?= $color ?>; padding: 10px;">
        <!-- A dynamic form input tag with all attributes defined: -->
        attributes from Array:
        <input <?php foreach ($attribs as $key => $value) echo "$key=\"$value\" "; ?>/>
        </li>
    </ul> 

    