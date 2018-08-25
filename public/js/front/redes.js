/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function share_facebook() {
    window.open('https://www.facebook.com/sharer.php?s=100&amp;p%5Btitle%5D=Welcome+to+Cartoon+Land&amp;p%5Bsummary%5D=The+term+minimalism+is+also+used+to+describe+a+trend+in+design+and+architecture+where+in+the+subject+is+reduced+to+its+necessary+elements.&amp;p%5Burl%5D=http%3A%2F%2Fdemo.qodeinteractive.com%2Fsimplicity%2Fwelcome-to-cartoon-land%2F&amp;p%5Bimages%5D%5B0%5D=http%3A%2F%2Fdemo.qodeinteractive.com%2Fsimplicity%2Fwp-content%2Fuploads%2F2013%2F08%2F012.jpg&amp;', 'sharer', 'toolbar=0,status=0,width=620,height=280');
}

function share_twitter() {
    popUp = window.open('http://twitter.com/share?url=http%3A%2F%2Fdemo.qodeinteractive.com%2Fsimplicity%2Fwelcome-to-cartoon-land%2F&amp;text=The+term+minimalism+is+also+used+to+describe+a+trend+in+design+&amp;count=horiztonal', 'popupwindow', 'scrollbars=yes,width=800,height=400');
    popUp.focus();
    return false;
}