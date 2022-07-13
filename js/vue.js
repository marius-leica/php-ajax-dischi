new Vue({
  el: "#app",
  data: {
    albumsList: [],
  },

  //voglio recuperare i dati del
  mounted() {
    axios.get("api/albumsList.php").then((resp) => {
      this.albumsList = resp.data.dati;
      console.log(resp.data.dati);
    });
  },
});
