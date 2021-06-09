const app = new Vue({
  el: '#app',
  data:{
    albums:[],
    genres:[],
    authors:[],
    autoreDaCercare: 'all',
    genereDaCercare: 'all',
    apiURL: 'http://localhost/php-intro/php-ajax-dischi/assets/data/api.php'

  },
  methods:{

    getAPI(){
      axios.get(this.apiURL,{
        params:{
          genre: this.genereDaCercare,
          author: this.autoreDaCercare
        }
      })
      .then(res => {
        this.albums = res.data.albums;
        this.genres = res.data.genres;
        this.authors = res.data.authors;
        console.log(this.genres);
        console.log(this.albums);
      }).catch(err => {
        console.log(err);
      })
    },
  },
  created(){
    this.getAPI();
    console.log('◄ chiamata api ►')
  }

});