$.getJSON( "https://api.kawalcorona.com/indonesia/provinsi/", function( data ) {
    let x=1;
    $.each (data, function (i , data){
        $('#daftar-provinsi').append('<tr><th scope="row">' + (i+x) + '</th><td>' +  data.attributes.Provinsi + '</td><td>' + data.attributes.Kasus_Posi + '</td><td>' + data.attributes.Kasus_Semb + '</td><td>' + data.attributes.Kasus_Meni + '</td></tr>')
    });
});

$.getJSON( "https://covid19.mathdro.id/api/countries/indonesia", function( data ) {
    console.log(data);
    let t=data.confirmed.value+data.recovered.value+data.deaths.value;
    $('#daftar-positif').append(' '+ data.confirmed.value +' ');
    $('#daftar-sembuh').append(' '+ data.recovered.value +' ');
    $('#daftar-kematian').append(' '+ data.deaths.value +' ');
    $('#daftar-total').append(' '+ t +' ');
    $('#dateUpdate').append(' '+ data.lastUpdate +' ');
});
