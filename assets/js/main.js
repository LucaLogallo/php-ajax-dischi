const app = new Vue({
  el : '#app',
  data:{
    dischi:[]
  },
  mounted(){
    axios.get('http://localhost/php-intro/php-ajax-dischi/assets/data/api.php').then(res =>{
      console.log(res.data);
      this.dischi=res.data;
    }).catch(err=>{
      console.log(err);
    })
  }
})