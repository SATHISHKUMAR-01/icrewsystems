 <!DOCTYPE html>
 <html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Todo List</title>
     <script src="https://cdn.tailwindcss.com"></script>
 </head>

 <body>
     <p class="text-blue-600 text-center text-6xl pt-6">Todo List</p>

     <a href="/addTask" class="content-center justify-center flex mt-4">
         <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
             Add Task
         </button>
     </a>

     @if(session()->has('message'))
    <div class=" text-center  text-red-500 text-xl p-4">
        {{ session()->get('message') }}
    </div>
    @endif

     @if(count($tasks) == 0)
     <div class="text-center pt-5 text-neutral-600 text-3xl">
         No tasks present. Create one
     </div>
     @else

     <table class="m-auto mt-10 border border-collapse table-auto p-5">
         <tr class="border">
             <th class="p-3"> Task ID </th>
             <th class="p-3"> Task</th>
             <th class="p-3"> Description</th>
             <th class="p-3"> Start Date</th>
             <th class="p-3"> End Date</th>
         </tr>



         @foreach($tasks as $task)
         <tr class="border">
             <td class="p-3"> {{$task->id}}</td>
             <td class="p-3"> {{$task->Task}}</td>
             <td class="p-3"> {{$task->Description}}</td>
             <td class="p-3"> {{$task->Created}}</td>
             <td class="p-3"> {{$task->End}}</td>
             <td>
                 <form action="/delete/{{$task->id}}" method="GET">

                     <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-3 ml-3 border border-blue-500 hover:border-transparent rounded">
                         Delete
                     </button>
                 </form>
             </td>
             <td>
                 <form action="/update/{{$task->id}}" method="GET">
                     <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-1 px-3 ml-3 border border-blue-500 hover:border-transparent rounded">
                         Update
                     </button>
                 </form>
             </td>
         </tr>
         @endforeach
         @endif




     </table>



 </body>

 </html>