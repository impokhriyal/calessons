<?php 
    include('config.php');
    $pdfURL = $_GET['pdfURL'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TFTZRSZ4');</script>
    <!-- End Google Tag Manager -->

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Worksheet PDF | <?php echo $website_name; ?></title>
    <meta name="description" content="Worksheet PDF" />
    <meta name="author" content="Lisa Flowers, Communication Acceleration">
    <meta name="category" content="Social Skills Worksheets and Activities in PDF for Autism" />
    <link rel="apple-touch-icon" href="<?php echo $website_url; ?>/apple-touch-icon.png">
    <link rel="manifest" href="<?php echo $website_url; ?>/manifest.webmanifest" />
    <link rel="icon" href="<?php echo $assets_url; ?>/assets/img/social-emotional-learning.png" />

    <?php include("includes/header-includes.php"); ?>
    <link type="text/css" rel="stylesheet" href="<?php echo $assets_url; ?>/assets/css/pdf.css" media="screen" />
    <script type="text/javascript" src="<?php echo $assets_url; ?>/assets/js/jquery.min.js"></script>
</head>
<body class="bg-alt-row">
    <main id="app">
        <div class="position-fixed vw-100">
            <div class="row justify-content-between align-items-center bg-secondary text-white p-2" role="toolbar" id="toolbar">
                <div class="col-6 col-md-5" id="pager">
                    <button class="btn btn-success text-white fw-normal btn-sm" data-pager="prev">Prev</button>
                    <button class="btn btn-success text-white fw-normal btn-sm" data-pager="next">Next</button>
                </div>
                <div class="col-6 col-md-7 text-end" id="page-mode">
                    <label class="pe-md-4">Page Mode <input class="ms-2" type="number" value="1" min="1" /></label>
                </div>
            </div>
        </div>
        <div id="viewport-container" class="bg-alt-row pt-7 pb-4">
            <div role="main" id="viewport"></div>
        </div>
    </main>
    <script src="https://unpkg.com/pdfjs-dist@2.0.489/build/pdf.min.js"></script>
    <script type="text/javascript">
        (function () {
            let currentPageIndex = 0;
            let pageMode = 1;
            let cursorIndex = Math.floor(currentPageIndex / pageMode);
            let pdfInstance = null;
            let totalPagesCount = 0;
            let transform = [1, 0, 0, 1, 0, 0];

            const viewport = document.querySelector("#viewport");
            window.initPDFViewer = function (pdfURL) {
                pdfjsLib.getDocument(pdfURL).then(pdf => {
                    pdfInstance = pdf;
                    totalPagesCount = pdf.numPages;
                    initPager();
                    initPageMode();
                    render();
                });
            };

            function onPagerButtonsClick(event) {
                const action = event.target.getAttribute("data-pager");
                if (action === "prev") {
                    if (currentPageIndex === 0) {
                        return;
                    }
                    currentPageIndex -= pageMode;
                    if (currentPageIndex < 0) {
                        currentPageIndex = 0;
                    }
                    render();
                }
                if (action === "next") {
                    if (currentPageIndex === totalPagesCount - 1) {
                        return;
                    }
                    currentPageIndex += pageMode;
                    if (currentPageIndex > totalPagesCount - 1) {
                        currentPageIndex = totalPagesCount - 1;
                    }
                    render();
                }
            }

            function initPager() {
                const pager = document.querySelector("#pager");
                pager.addEventListener("click", onPagerButtonsClick);
                return () => {
                    pager.removeEventListener("click", onPagerButtonsClick);
                };
            }

            function onPageModeChange(event) {
                pageMode = Number(event.target.value);
                render();
            }

            function initPageMode() {
                const input = document.querySelector("#page-mode input");
                input.setAttribute("max", totalPagesCount);
                input.addEventListener("change", onPageModeChange);
                return () => {
                    input.removeEventListener("change", onPageModeChange);
                };
            }

            function render() {
                cursorIndex = Math.floor(currentPageIndex / pageMode);
                const startPageIndex = cursorIndex * pageMode;
                const endPageIndex =
                    startPageIndex + pageMode < totalPagesCount ?
                    startPageIndex + pageMode - 1 :
                    totalPagesCount - 1;

                const renderPagesPromises = [];
                for (let i = startPageIndex; i <= endPageIndex; i++) {
                    renderPagesPromises.push(pdfInstance.getPage(i + 1));
                }

                Promise.all(renderPagesPromises).then(pages => {
                    const pagesHTML = `<div style="width: ${
                    pageMode > 1 ? "50%" : "100%"
                    }"><canvas></canvas></div>`.repeat(pages.length);
                    viewport.innerHTML = pagesHTML;
                    pages.forEach(renderPage);
                });
            }

            function renderPage(page) {
                let pdfViewport = page.getViewport(1);

                const container = viewport.children[page.pageIndex - cursorIndex * pageMode];
                pdfViewport = page.getViewport(container.offsetWidth / pdfViewport.width);
                const canvas = container.children[0];
                const context = canvas.getContext("2d");
                canvas.height = pdfViewport.height;
                canvas.width = pdfViewport.width;

                page.render({
                    canvasContext: context,
                    viewport: pdfViewport,
                    transform: transform,
                });
            }

            // initialize PDF Viewer
            initPDFViewer("<?php echo $pdfURL ?>");
        })();
    </script>
</body>
</html>