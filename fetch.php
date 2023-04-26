<script>
    function api(url,options){
        let promise = fetch(url,options)
        promise.then(response => {
            console.log(response.status)
            console.log(response.ok)
            return(response.json())
        }).then(final => {
            console.log(final)
            document.write(final)
        })
    }   
</script>

