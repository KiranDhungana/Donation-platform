<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Club to approve</title>
    @include('globallink')
    <link rel="stylesheet" href="{{ asset('assets/css/customcss.css') }}">
</head>
<body>
    
@include('reusecomp/navbar')
<div class="w-[80%] mx-auto border">
    <table class="w-full text-sm text-left rtl:text-right text-gray-500  mt-[4rem]">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 ">
            <tr>
               <th scope="col" class="px-6 py-3">
                    S.NO
                </th>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    Description
                </th>
                <th scope="col" class="px-6 py-3">
                    Phone Number 
                </th>
               
                <th scope="col" class="px-6 py-3">
                    Target-Amount
                </th>
                <th scope="col" class="px-6 py-3">
                    Documents Action
                </th>
               
            </tr>
        </thead>
        <tbody>
          @php
          $j = 1;
      @endphp
      

          @foreach ($clubdata as $postdata)
          @if ($postdata->approvedstatus==0)
          <tr class="bg-white  border-b ">
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                {{$j}}
            </th>
            <td class="px-6 py-4">
                {{$postdata['name']}}
            
            </td>
            <td>

                {{$postdata['catagory']}}
            
            </td>
            <td class="px-6 py-4">
                {{$postdata['description']}}
               
            </td>
            
           
            <td class="px-6 py-4">
              <a href="/documents-club/{{$postdata['id']}}" >
                View Documents
              </a>
        
  
              </td>
                <td class="px-6 py-4">
              <form action="/approve-org/{{$postdata['id']}}" method="POST">
                @csrf
               
                <button type="submit">Approve</button>
                </form>    
  
              </td>
        </tr>
          @else
          @continue
                
          @endif
        
       
         @php
          $j = $j+1;
      @endphp
          @endforeach
          
         
           
            
        </tbody>
    </table>
</div>


     
    
</body>
</html>