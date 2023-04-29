function toggleSidebar() {
    var sidebar = document.getElementById("sidebar");
    var content = document.getElementsByClassName("content")[0];
    if (sidebar.style.left === "-200px") {
        sidebar.style.left = "0";
        content.style.marginLeft = "200px";
    } else {
        sidebar.style.left = "-200px";
        content.style.marginLeft = "0";
    }
}
