VOWELS = ['a', 'e', 'i', 'o', 'u']
TWOCHARS = ['ch', 'qu', 'th']
THREECHARS = ['thr', 'sch']
VOWELCLSTR = ['xr', 'yt']

class PigLatin(object):

    def getPigLatinWord(self, word):
        if self.checkWordStart(0, 1, word, VOWELS) or self.checkWordStart(0, 2, word, VOWELCLSTR):
            return self.pigLatinlyWord(0, 0, word)
        if self.checkWordStart(0, 3, word, THREECHARS) or self.checkWordStart(1, 3, word,  "qu"):
            return self.pigLatinlyWord(0, 3, word)
        if self.checkWordStart(0, 2, word, TWOCHARS):
            return self.pigLatinlyWord(0, 2, word)
        return self.pigLatinlyWord(0, 1, word)

    def checkWordStart(self, start, end, word, charstocheck):
        return word[start:end] in charstocheck

    def pigLatinlyWord(self, start, end, word):
        return word[end::] + word[start:end]+"ay"

    def getPigLatinSentence(self, sentence):
        newSentence = ""
        for word in sentence.split(" "):
            newSentence = newSentence + self.getPigLatinWord(word) + " "
        return newSentence.strip()
