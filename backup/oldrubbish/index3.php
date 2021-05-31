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
    grid-template-columns: 1fr 2fr 1fr;
    grid-auto-rows:minmax(100px, auto);
    grid-gap:1em;

    /* strech = default
    end = right side
    start = left side
    center = center  */
    justify-items:strech;

    /*does up and down*/
    /*align-items: center;*/

}
.box1{
    /*align-self:start;*/
    grid-column:1/3;
    grid-row: 1/3;
}

.box2{
    /*align-self:end;*/
    grid-column:3;
    grid-row:1/3;
}
.box3{
    /*justify-self:end;*/
    grid-column: 2/4; /* Starting at 2 end at 4*/
    grid-row:3;
}
.box4{
    /*You can overlap things with gridcss. YOu can't with flex */
    grid-column:1;
    grid-row:2/4;
    border: #333 1px solid;
}




</style>
<div class="wrapper">
<div class="box box1">Box 1</div> 
<div class="box box2">Box 2</div> 
<div class="box box3">Box 3</div> 
<div class="box box4">Box 4</div> 

</div>

</body>
</html>