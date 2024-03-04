<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Club to approve</title>
</head>
<body>
     <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
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
                            Documents
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Action
                        </th>
                    </tr>
                </thead>
                <tbody>
                  @php
                  $j = 1;
              @endphp
              
        
                  @foreach ($clubdata as $postdata)
                  @if ($postdata->approvedstatus==0)
                  <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
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
    
</body>
</html>