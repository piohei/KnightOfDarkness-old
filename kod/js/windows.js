function openWindow( url, width, height, title ){
    options = "width="+width+",height="+height+",location=no,toolbar=no"+
        "status=no,menubar=no,resizable=yes,scrollbars=yes";
    newWindow = window.open(url, title, options );
}
