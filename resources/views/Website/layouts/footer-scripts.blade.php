<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.4.0/mdb.min.js"></script>
<script>
    window.onload = () => {
        var currentUrl = window.location.href;
        document.querySelectorAll("ul li a").forEach(function(link) {
            if (link.href === currentUrl) {
                link.classList.add("active");
            }
        });
    };
</script>
@stack('js')
