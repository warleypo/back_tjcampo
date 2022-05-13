<script>
  let i = 0

  function myClick() {
    ++i
  }
</script>

<main>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header">My Test Component</div>
          <div class="card-body" on:click={myClick}>
            I'm a test component. {i}
          </div>
        </div>
      </div>
    </div>
  </div>
</main>