export default {
    capitalizeWords: function (arr) {
        return arr.map(element => {
            return element.charAt(0).toUpperCase() + element.substring(1).toLowerCase();
        });
    },

    makeReadable: function (key) {
        return this.capitalizeWords(key.replaceAll('_', ' ').split(' ')).join(' ');
    },
    rupiah: function(angka){
        return "Rp. "+new Intl.NumberFormat("en-ID").format(
            angka
          );
    },
    imageUrl: function(url){
        if(url !== undefined)
        {
            if(url.match(/http/))
            {
                return url;
            }else{
                return '/storage/'+url;
            }
        }else{
            return url;
        }
    
    },
    stripTags: function(string){
        if(string !== undefined) return string.replace(/(<([^>]+)>)/gi, "");
    }
}