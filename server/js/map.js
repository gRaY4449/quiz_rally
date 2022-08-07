function initialize() {
  var latlng = new google.maps.LatLng(35.166875,136.880485);/*表示したい場所の経度、緯度*/
  var myOptions = {
    zoom: 18, /*拡大比率*/
    center: latlng, /*表示枠内の中心点*/
    mapTypeId: google.maps.MapTypeId.ROADMAP/*表示タイプの指定*/
  };
  var map = new google.maps.Map(document.getElementById('map_custmomize'), myOptions);
}
