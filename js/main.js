Vue.config.devtools = true;

const app = new Vue({
  el: "#app",
  data: {
    cdList: []
  },
  mounted() {
    axios.get("http://localhost/php-ajax-dischi/api/cds.php").then((resp) => {
      this.cdList = resp.data;
    })
  }
})