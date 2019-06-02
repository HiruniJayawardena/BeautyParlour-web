$('#btnPlaceOrder').click(function () {
    var id=$('txtOID').val();
    var rows="<tr><td>"+id+"</td></tr>"
    $('#tableN').append(rows);
})