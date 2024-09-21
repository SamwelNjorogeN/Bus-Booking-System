
document.getElementById('download').addEventListener('click', function () {
    // Send an AJAX request to retrieve the data from the server
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'get_data.php', true); // Replace 'get_data.php' with the server-side script to retrieve the data
    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4 && xhr.status === 200) {
            var data = JSON.parse(xhr.responseText);

            // Generate the print screen
            var printContent = '';
            data.forEach(function (record) {
                printContent += record.field1 + ' | ' + record.field2 + ' | ' + record.field3 + '<br>'; // Adjust the field names as per your table structure
            });
            var printWindow = window.open('', '_blank');
            printWindow.document.open();
            printWindow.document.write('<html><body>' + printContent + '</body></html>');
            printWindow.document.close();

            // Generate the PDF
            var pdfData = JSON.stringify(data);

            // Send the PDF data to the server for PDF generation and download
            var pdfXhr = new XMLHttpRequest();
            pdfXhr.open('POST', 'generate_pdf.php', true); // Replace 'generate_pdf.php' with the server-side script to generate the PDF
            pdfXhr.setRequestHeader('Content-Type', 'application/json');
            pdfXhr.responseType = 'blob';
            pdfXhr.onreadystatechange = function () {
                if (pdfXhr.readyState === 4 && pdfXhr.status === 200) {
                    // Create a download link for the PDF and trigger the download
                    var blob = new Blob([pdfXhr.response], { type: 'application/pdf' });
                    var downloadLink = document.createElement('a');
                    downloadLink.href = URL.createObjectURL(blob);
                    downloadLink.download = 'table_data.pdf';
                    downloadLink.click();
                }
            };
            pdfXhr.send(pdfData);
        }
    };
    xhr.send();
});