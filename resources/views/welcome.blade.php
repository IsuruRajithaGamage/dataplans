@extends('layouts.default')

@section('page-content')


<section class="py-20">
    
    <div class=" px-8">
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
        <div class="bg-purple-400 rounded-lg font-bold mx-10">
        <table class="table-auto  ">
            <thead>
              <tr>
                <th>Provider.................</th>
                <th>Price</th>
                <th>Day</th>
                <th>Night</th>
                <th>Activate</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>SLT</td>
                <td>Rs.650</td>
                <td>8GB</td>
                <td>10GB</td>
                <th>Dial #171# or 141 or sms INT D99 to 7678</th>

              </tr>
              <tr class="bg-emerald-200">
                <td>Mobitel</td>
                <td>Rs.750</td>
                <td>13GB</td>
                <td>17GB</td>
              </tr>
              <tr>
                <td>Dialog</td>
                <td>RS.600</td>
                <td>8GB</td>
                <td>13GB</td>
              </tr>
            </tbody>
          </table>
        </div>      
    </div>
</section>



<section class="py-10">
    <div class=" px-8">
        <div class="flex flex-wrap mx-2">
            <div class="w-full sm:w-1/2 nb-3 px2">
                <div class="p-2 bg-gradient-to-r from-pink-600 h-full rounded-lg" >
                    <h3 class="text-xl font-bold mb-3">Rs(1000-2000)</h3>
               </div>
              
            </div>
         </div>
        <table class="table-auto  bg-purple-400 rounded-lg font-bold">
            <thead>
              <tr>
                <th>Provider.................</th>
                <th>Price</th>
                <th>Day</th>
                <th>Night</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>SLT</td>
                <td>650</td>
                <td>8GB</td>
                <td>10GB</td>
              </tr>
              <tr class="bg-emerald-200">
                <td>Mobitel</td>
                <td>750</td>
                <td>13GB</td>
                <td>17GB</td>
              </tr>
              <tr>
                <td>Dialog</td>
                <td>600</td>
                <td>8GB</td>
                <td>13GB</td>
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