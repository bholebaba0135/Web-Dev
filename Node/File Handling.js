var fs=require('fs');
var data=fs.readFileSync('Q3.txt','utf8');
fs.writeFileSync('Dest_file.txt',data);
var spec_char=0;
var word=0;
var nspec_char=0;
for(let i=0;i < data.length;i++){
    if((data.charCodeAt(i)>32 && data.charCodeAt(i)<48) || (data.charCodeAt(i)>57 && data.charCodeAt(i)<65) || (data.charCodeAt(i)>90 && data.charCodeAt(i)<97)){
        spec_char++;
    }
    else if(data.charAt(i)==' '){
        word++;
    }
    else{
        nspec_char++;
    }
}
word=word+1;
var charac=spec_char+nspec_char;
console.log('Total no. of special characters: '+spec_char);
console.log('Total no. of non special characters: '+nspec_char);
console.log('Total no. of characters: '+charac);
console.log('Total no. of words: '+word);