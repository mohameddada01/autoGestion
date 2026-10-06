@props(['type' , 'errors'])
<div class="container py-1">
  <!-- Flash Alert -->
  <div id="flashAlert" class="alert flash-alert alert-custom-{{$type}} alert-dismissible fade show" role="alert">
     {{$slot}}
   
    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Fermer"></button>
    <div class="alert-timer-bar"></div>
  </div>
</div>

<!-- Bootstrap JS -->


<!-- Auto-dismiss script -->
<script>
  setTimeout(() => {
    const alert = document.getElementById('flashAlert');
    if (alert) {
      const bsAlert = bootstrap.Alert.getOrCreateInstance(alert);
      bsAlert.close();
    }
  }, 5000);
</script>