<div id="inuendo-banner-container_1" style="width: 200px; height: 200px; background-color: orange"></div>
<script id="inuendo-banner-script_1" async>
    'use strict';
    const BANNER_SERVICE_ID = 1;

    function httpGet(url) {
        return new Promise(function(resolve, reject) {

            var xhr = new XMLHttpRequest();
            xhr.open('GET', url, true);

            xhr.onload = function() {
                if (this.status == 200) {
                    resolve(this.response);
                } else {
                    var error = new Error(this.statusText);
                    error.code = this.status;
                    reject(error);
                }
            };

            xhr.onerror = function() {
                reject(new Error("Network Error"));
            };

            xhr.send();
        });

    }

    function dhtmlLoadScript(url) {
        var e = document.createElement("script");
        e.src = url;
        e.type="text/javascript";
        document.getElementById("`inuendo-banner-container_${BANNER_SERVICE_ID}`").appendChild(e);
    }

    onload = function() {
        dhtmlLoadScript("adv-frame-main.js");
    }


    httpGet(`http://localhost/Inuendo/web/advertisement?id=${BANNER_SERVICE_ID}`)
        .then(response => {document.querySelector(`#inuendo-banner-container_${BANNER_SERVICE_ID}`).createElement('script');
        },
              error => console.log(`Inuendo banner couldn't download due some troubles: ${error}`)).then(
                  response => func()
    )
</script>