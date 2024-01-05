
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
</script>

<script>
const toastTrigger = document.getElementById('liveToastBtn')
const toastLiveExample = document.getElementById('liveToast')

if (toastTrigger) {
const toastBootstrap = new bootstrap.Toast(toastLiveExample)
toastTrigger.addEventListener('click', () => {
    toastBootstrap.show()
})
}
</script>
{{-- 
<footer class="text-center text-lg-start footer-expand-lg" style="background-color: #2c2e2e;">

    <div class="text-center text-white p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2024 Copyright:
      <a class="text-white" href="#">Shopping-Site.com</a>
    </div>

  </footer>  --}}
