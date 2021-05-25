@extends('layouts.default')

@section('page-content')


<section class="relative min-h-screen flex items-center">
  <div class="container mx-auto text-center "> 
  <div class="bg-gradient-to-r from-green-400 to-blue-500 px-6 py-10">
    <p class="text-8xl">Pick Your Plan</p>
  </div>
    
    <div class=" px-8 py-8">
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px-1">
                <div class="p-2 bg-gradient-to-r from-yellow-400 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3 text-white">Rs(500-1000)</h3>
                </div>
                
            </div>
        </div>
        
      </div>
        <div>
          <div>
            <h3 class="text-xl font-bold text-white px-10">DATA</h3>
          </div>
        </div>
        <div class="bg-purple-400 rounded-lg mx-10">
        <table class="table-fixed text-xl text-center ">
            <thead>
              <tr class="bg-blue-200">
                <th class="border border-purple-300">Provider</th>
                <th class="border border-purple-300">Price</th>
                <th class="border border-purple-300">Day</th>
                <th class="border border-purple-300">Night</th>
                <th class="w-1/4 border border-purple-300" >Activate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td class="border border-purple-300">SLT broadband </td>
                <td>Rs.650   </td>
                <td class="border border-purple-300">8GB</td>
                <td class="border border-purple-300">10GB</td>
                <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 visit mobitel.lk</th>

              </tr>
              <tr class="bg-emerald-200">
                <td class="border border-purple-300">Mobitel</td>
                <td class="border border-purple-300">Rs.750</td>
                <td class="border border-purple-300">13GB</td>
                <td class="border border-purple-300">17GB</td>
                <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
              </tr>
              <tr>
                <td class="border border-purple-300">Dialog</td>
                <td class="border border-purple-300">RS.600</td>
                <td class="border border-purple-300">8GB</td>
                <td class="border border-purple-300">13GB</td>
                <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
              </tr>
            </tbody>
          </table>
          
        </div>   
        <div>
          <h3 class="text-xl font-bold text-white px-10">VOICE</h3>
        </div>
        <div class="bg-purple-400 rounded-lg mx-10">
        
        <table class="table-fixed text-xl text-center ">
          <thead>
            <tr class="bg-blue-200">
              <th class="border border-purple-300">Provider</th>
              <th class="border border-purple-300">Price</th>
              <th class="border border-purple-300">Day</th>
              <th class="border border-purple-300">Night</th>
              <th class="w-1/4 border border-purple-300" >Activate</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-purple-300">SLT broadband </td>
              <td>Rs.650   </td>
              <td class="border border-purple-300">8GB</td>
              <td class="border border-purple-300">10GB</td>
              <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 visit mobitel.lk</th>

            </tr>
            <tr class="bg-emerald-200">
              <td class="border border-purple-300">Mobitel</td>
              <td class="border border-purple-300">Rs.750</td>
              <td class="border border-purple-300">13GB</td>
              <td class="border border-purple-300">17GB</td>
              <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
            </tr>
            <tr>
              <td class="border border-purple-300">Dialog</td>
              <td class="border border-purple-300">RS.600</td>
              <td class="border border-purple-300">8GB</td>
              <td class="border border-purple-300">13GB</td>
              <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
            </tr>
          </tbody>
        </table>
        </div>
        <div class="flex flex-wrap mx-2 py-8">
          <div class="w-full sm:w-1/2 nb-3 px2">
              <div class="p-2 bg-gradient-to-r from-pink-600 h-full rounded-lg" >
                  <h3 class="text-xl font-bold mb-3">Rs(1000-2000)</h3>
             </div>
            
          </div>
       </div>
       <table class="table-fixed text-xl text-center ">
        <thead>
          <tr class="bg-blue-200">
            <th class="border border-purple-300">Provider</th>
            <th class="border border-purple-300">Price</th>
            <th class="border border-purple-300">Day</th>
            <th class="border border-purple-300">Night</th>
            <th class="w-1/4 border border-purple-300" >Activate</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="border border-purple-300">SLT broadband </td>
            <td>Rs.650   </td>
            <td class="border border-purple-300">8GB</td>
            <td class="border border-purple-300">10GB</td>
            <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 visit mobitel.lk</th>

          </tr>
          <tr class="bg-emerald-200">
            <td class="border border-purple-300">Mobitel</td>
            <td class="border border-purple-300">Rs.750</td>
            <td class="border border-purple-300">13GB</td>
            <td class="border border-purple-300">17GB</td>
            <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
          </tr>
          <tr>
            <td class="border border-purple-300">Dialog</td>
            <td class="border border-purple-300">RS.600</td>
            <td class="border border-purple-300">8GB</td>
            <td class="border border-purple-300">13GB</td>
            <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
          </tr>
        </tbody>
      </table>
    </div>
    
    
</section>



<section class="relative min-h-screen flex items-center">
    <div class="container mx-auto text-center">
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-2 bg-gradient-to-r from-pink-600 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Rs(1000-2000)</h3>
               </div>
              
            </div>
         </div>
         <table class="table-fixed text-xl text-center ">
          <thead>
            <tr class="bg-blue-200">
              <th class="border border-purple-300">Provider</th>
              <th class="border border-purple-300">Price</th>
              <th class="border border-purple-300">Day</th>
              <th class="border border-purple-300">Night</th>
              <th class="w-1/4 border border-purple-300" >Activate</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="border border-purple-300">SLT broadband </td>
              <td>Rs.650   </td>
              <td class="border border-purple-300">8GB</td>
              <td class="border border-purple-300">10GB</td>
              <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 visit mobitel.lk</th>

            </tr>
            <tr class="bg-emerald-200">
              <td class="border border-purple-300">Mobitel</td>
              <td class="border border-purple-300">Rs.750</td>
              <td class="border border-purple-300">13GB</td>
              <td class="border border-purple-300">17GB</td>
              <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
            </tr>
            <tr>
              <td class="border border-purple-300">Dialog</td>
              <td class="border border-purple-300">RS.600</td>
              <td class="border border-purple-300">8GB</td>
              <td class="border border-purple-300">13GB</td>
              <th class="border border-purple-300">Dial #171# or 141 or sms INT D99 to 7678 </th>
            </tr>
          </tbody>
        </table>
   </div>

</section>



<section class="py-10">

    <div class=" px-8 ">
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-2 bg-gradient-to-r from-pink-600 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Rs(2000-3000)</h3>
                    
                </div>
      
            </div>

        </div>
      <table class="border-separate border border-green-800 ...">

  <thead>
    <tr>
      <th class="border border-green-600 ...">Provider</th>
      <th class="border border-green-600 ...">City</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td class="border border-green-600 ...">Indiana</td>
      <td class="border border-green-600 ...">Indianapolis</td>
    </tr>
    <tr>
      <td class="border border-green-600 ...">Ohio</td>
      <td class="border border-green-600 ...">Columbus</td>
    </tr>
    <tr>
      <td class="border border-green-600 ...">Michigan</td>
      <td class="border border-green-600 ...">Detroit</td>
    </tr>
  </tbody>
</table>
        
    </div>
</section>

@endsection