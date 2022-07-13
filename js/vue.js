new Vue({
  el: "#app",
  data: {
    albumsList: [],
  },
  mounted() {
    axios.get("api/albumsList.php").then((resp) => {
      this.albumsList = resp.albumsList.albumsList;
    });
  },
});
