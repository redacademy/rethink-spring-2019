$(document).ready(function() { $("#custom-chimp-button").on("click", function() { var frame = document.getElementById("chimp-form-main"); var content = frame.contentWindow; content.postMessage("open-chimp-frame", "*"); frame.style.opacity = 1; frame.style.display = "block"; }); });

