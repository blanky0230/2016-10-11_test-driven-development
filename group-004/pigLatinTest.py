import unittest
from pigLatin import PigLatin

class pigLatinTest(unittest.TestCase):

    def test_returnWordVowel(self):
        piglatin = PigLatin();
        self.assertEqual(piglatin.getPigLatinWord("apple"), "appleay")
        self.assertEqual(piglatin.getPigLatinWord("egg"), "eggay")

    def test_returnWordNonVowel(self):
        piglatin = PigLatin();
        self.assertEqual(piglatin.getPigLatinWord("bird"), "irdbay")
        self.assertEqual(piglatin.getPigLatinWord("fly"), "lyfay")

    def test_returnPigLatinSentence(self):
        piglatin = PigLatin();
        self.assertEqual(piglatin.getPigLatinSentence("a yellow bird"), "aay ellowyay irdbay")
        self.assertEqual(piglatin.getPigLatinSentence("a green bird"), "aay reengay irdbay")

    def test_returnPigLatinCluster(self):
        piglatin = PigLatin();
        self.assertEqual(piglatin.getPigLatinWord("chair"), "airchay")
        self.assertEqual(piglatin.getPigLatinWord("square"), "aresquay")
        self.assertEqual(piglatin.getPigLatinWord("thread"), "eadthray")
        self.assertEqual(piglatin.getPigLatinWord("thump"), "umpthay")
        self.assertEqual(piglatin.getPigLatinWord("school"), "oolschay")

    def test_returnPigLatinVowelCluster(self):
        piglatin = PigLatin();
        self.assertEqual(piglatin.getPigLatinWord("xray"), "xrayay")
        self.assertEqual(piglatin.getPigLatinWord("ytong"), "ytongay")


if __name__ == '__main__':
    unittest.main()