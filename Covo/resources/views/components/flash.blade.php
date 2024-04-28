@props(['status',])
@if(session($status))
@if(session('succes'))
<div id="success" class="rounded-lg bg-green-50 p-2 self-center mb-2 w-100">
  <div class="flex">
      <div class="flex-shrink-0">
         
          <i class="bi bi-check2-all text-green-600 text-md"></i>
      </div>
      <div class="ml-3">
          <p class="text-sm font-medium text-center text-green-800 align-middle">
            {{ session($status) }}
          </p>
      </div>
  </div>
</div>
@else 
<div id="error" class="rounded-lg bg-red-50 p-2 self-center mb-2 w-100">
    <div class="flex">
        <div class="flex-shrink-0">
           
           <i class="bi bi-x-octagon text-red-600 text-md"></i>
        </div>
        <div class="ml-3">
            <p class="text-sm font-medium text-red-800 align-middle">
              {{ session($status) }}
            </p>
        </div>
    </div>
  </div>
@endif
@endif

<script>
    setTimeout(function() {
        var successAlert = document.getElementById('success');
        if (successAlert) {
            successAlert.style.display = 'none';
        }
    }, 3500); // 3 secondes
    setTimeout(function() {
        var errorAlert = document.getElementById('error');
        if (errorAlert) {
            errorAlert.style.display = 'none';
        }
    }, 10000); // 3 secondes
</script>