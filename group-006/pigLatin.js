var chai = require('chai');
var expect = chai.expect;

var isVowel = function(char) {
        var vowels = [ 'a', 'e', 'i', 'o', 'u' ];

        return vowels.indexOf(char) > 0;
    },
    getAsPigLatin = function(sentenceInput) {
        var words = sentenceInput.split(' '),
            result = '',
            following = false;

        for (var i = 0, len = words.length; i < len; i++) {
            var currentWord = words[i],
                firstChar = currentWord[0],
                appendText = 'ay';

            if (following) {
                result += ' ';
            }

            if (isVowel(firstChar)) {
                result += currentWord + appendText;
            }
            else {
                for (var j = 1, length = currentWord.length; j < length; j++) {
                    result += currentWord[j];
                }
                result += currentWord[0];

                result += appendText;
            }

            following = true;
        }

        return result;
    };

describe('PigLatin', function(){
    it('getAsPigLatin("io") should return "ioay"', function() {
        expect(getAsPigLatin('io')).to.equal('ioay');
    });
    it('getAsPigLatin("bird") should return "irdbay"', function() {
        expect(getAsPigLatin('bird')).to.equal('irdbay');
    });
    it('getAsPigLatin("a yellow bird") should return "aay ellowyay irdbay"', function() {
        expect(getAsPigLatin('a yellow bird')).to.equal('aay ellowyay irdbay');
    });
});
