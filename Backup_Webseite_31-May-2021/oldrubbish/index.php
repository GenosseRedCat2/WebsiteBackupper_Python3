<!doctype html>
<head>
   <title>CSS GRIDS </title>
   <style>
      .wrapper{
      display: grid;
      grid-template-columns: 20% 30% 20%;
      
      /*
      Make a gap between all of them
      
      grid-column-gap: 1em;
      grid-row-gap: 1em;
      */
      grid-gap: 1em;


      }
      body{
      background-color: #5c5c5c;
      }
      .wrapper > div{
      background: gray;
      padding: 1em;
      }
      .wrapper > div:nth-child(odd){
      background: #ddd;
      }
   </style>
</head>
<body>
   <div class="wrapper">
      <div>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. 
         Voluptates rerum, nam labore unde veritatis veniam esse repudiandae eveniet perferendis consequuntur qui architecto cum vel ab asperiores obcaecati expedita illo vitae?
         Neque facilis et rerum tempora amet molestiae temporibus, 
         esse alias inventore, dolorum porro ratione repellat necessitatibus natus veritatis nam consequuntur aperiam consectetur eos suscipit similique. 
         Aliquam ut reprehenderit tenetur quod nesciunt laborum voluptates, 
         consequuntur temporibus pariatur deserunt facilis ducimus repellat at nobis maxime. 
         Aliquid earum, vitae cumque tempore iure quo?
      </div>
      <div>
         HOIILorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eum, dolorem assumenda est sed harum ullam veritatis nulla cumque at vero voluptas consequatur libero deserunt alias unde mollitia natus quisquam!
      </div>
      <div>
         Lorem ipsum dolor sit amet consectetur adipisicing elit. 
         Voluptates rerum, nam labore unde veritatis veniam esse repudiandae eveniet perferendis consequuntur qui architecto cum vel ab asperiores obcaecati expedita illo vitae?
         Neque facilis et rerum tempora amet molestiae temporibus, 
         esse alias inventore, dolorum porro ratione repellat necessitatibus natus veritatis nam consequuntur aperiam consectetur eos suscipit similique. 
         Aliquam ut reprehenderit tenetur quod nesciunt laborum voluptates, 
         consequuntur temporibus pariatur deserunt facilis ducimus repellat at nobis maxime. 
         Aliquid earum, vitae cumque tempore iure quo?
      </div>
      <div>
         HOIILorem ipsum dolor sit amet consectetur adipisicing elit. Expedita eum, dolorem assumenda est sed harum ullam veritatis nulla cumque at vero voluptas consequatur libero deserunt alias unde mollitia natus quisquam!
      </div>

      <div>Yellow!</div>
   </div>
</body>
</html>