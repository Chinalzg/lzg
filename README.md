# lzg
js转码
function _uniencode(inputStr){
  var outputStr = "";
    for (var i = 0; i < inputStr.length; i++) {
      var temp = inputStr.charCodeAt(i);
      //0xxxxxxx
      if (temp < 128) {
        outputStr += String.fromCharCode(temp);
      }
      //110xxxxx 10xxxxxx
      else if (temp < 2048) {
        outputStr += String.fromCharCode((temp >> 6) | 192);
        outputStr += String.fromCharCode((temp & 63) | 128);
      }
      //1110xxxx 10xxxxxx 10xxxxxx
      else if (temp < 65536) {
        outputStr += String.fromCharCode((temp >> 12) | 224);
        outputStr += String.fromCharCode(((temp >> 6) & 63) | 128);
        outputStr += String.fromCharCode((temp & 63) | 128);
      }
      //11110xxx 10xxxxxx 10xxxxxx 10xxxxxx
      else {
        outputStr += String.fromCharCode((temp >> 18) | 240);
        outputStr += String.fromCharCode(((temp >> 12) & 63) | 128);
        outputStr += String.fromCharCode(((temp >> 6) & 63) | 128);
        outputStr += String.fromCharCode((temp & 63) | 128);
      }
    }
    return outputStr;

}
