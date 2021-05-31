<!doctype html>
<head>
<title>blabla</title>


</head>
<body>
<style>
body{
    background-color: gray;
}

.wrapper > div{
    background: #eee;
    padding: 1em;
}

.wrapper > div:nth-child(odd){
    background: #ddd;
}

.wrapper{
    display: grid;
    /*grid-template-columns: 1fr 5fr 1fr;
    recommended to use fr = fractions over percentage, px etc. no problem with margin and padding
    */

    grid-template-columns: repeat(3, 1fr);
    /*repeat(4, 1fr 2fr); could repeat multiple of times*/
    grid-gap:1em;
    
    /*grid-auto-rows:100px; 
    increases the hight of all to 100px but it doesn't keep text in the divs.
    Meaning if the text is too long it ignores it and looks horrible.
    
    Possibly good for nav?
    */

    /* Makes a Minimum and Maximum height. the max is auto, incase it's longer, min is fixed*/
    grid-auto-rows: minmax(100px, auto);
    
}


.nested{
    display: grid;
    grid-template-columns:repeat(3, 1fr);
    grid-auto-rows: 70px;
    grid-gap: 1em;
}


.nested > div{
    border: #333 1px solid;
    padding: 1em;
}

</style>
</body>
<div class="wrapper">
<div>Lorem ipsum dolor sit. Lorem ipsum dolor sit amet consectetur, adipisicing elit. Vel illum alias tenetur ipsum at natus labore accusantium assumenda, placeat voluptate optio dignissimos distinctio repellendus tempore facere quisquam non nesciunt excepturi aut et animi vitae. Asperiores, expedita veritatis. Dolores, enim culpa nostrum ut repellendus explicabo ratione praesentium facilis cumque? Tempora, aperiam!</div>
<div>Lorem ipsum dolor sit.</div>
<div>Lorem ipsum dolor sit.</div>

<div class="nested">
<div>lorem</div>
<div>lorem</div>
<div>lorem</div>
<div>lorem</div>
<div>lorem</div>
<div>lorem</div><div>lorem</div>
<div>lorem</div>
<div>lorem</div><div>lorem</div>
<div>lorem</div>
<div>lorem</div>
</div>

<div>Lorem ipsum dolor sit.</div>
<div>Lorem ipsum dolor sit.</div>
<div>Lorem ipsum dolor sit amet consectetur adipisicing elit. Architecto error repellendus fugit, sapiente qui quibusdam neque consequatur sed. Odio tempore quis voluptatum, aliquid saepe omnis autem error. Quaerat nostrum tempore, aut non alias sapiente, temporibus delectus assumenda sequi possimus accusamus.</div>
<div>Lorem ipsum dolor sit.</div>
<div>Lorem ipsum dolor sit.</div>
</div>
</html>