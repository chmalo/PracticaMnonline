<template>
<div id="app" class="container">
       <h1>Curso de Vue.js en Styde.net</h1>


    <ul class="nav nav-tabs">
        <router-link tag="li" to="/" active-class="active" exact><a>Dashboard</a></router-link>
        <router-link tag="li" to="/tasks" active-class="active"><a>Tareas</a></router-link>
    </ul>

        <keep-alive>
            <router-view></router-view>
        </keep-alive>



      <footer class="footer">
         <p>&copy; Chmalo.net.</p>
      </footer>
    </div>

</template>

<script>
export default {
  //
}
</script>

<style>

  body {
    margin: 10px;
  }

  .container {
    max-width: 920px;
  }

  .container h2 {
    margin-bottom: 20px;
  }

  .container footer {
    margin: 40px 0;
    padding-top: 20px;
    border-top: 1px solid #ccc;
    color: #999;
  }
</style>


