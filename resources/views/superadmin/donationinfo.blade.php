<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @include('globallink') 
</head>
<body>
  @foreach ($post as $io)
  
   @foreach ($donationamount as $i)

   @if ($io['id']==$i['postid'])
     {{ 
     $io['title']
    }}
   <div class="flex flex-row " >
        <div class="border-[2px]" >
            {{
    $i['postid']
  }}
            {{
    $i['total_amount']
  }}
        
       
   @else
       
   @endif
       
           


        </div>

    </div>
  
        
    @endforeach
      
  @endforeach

   
    
</body>
</html>