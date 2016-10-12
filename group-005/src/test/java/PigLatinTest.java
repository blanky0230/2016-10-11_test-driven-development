import org.junit.Test;

import static junit.framework.TestCase.assertEquals;

/**
 * Created by tweinreich on 11.10.16.
 */
public class PigLatinTest {

    @Test
    public void appendAyWhenStartsWithVowelsTest() {
        String testWord = "apple";
        String expectedOutput = "appleay";
        PigLatin pigLatin = new PigLatin();
        assertEquals(expectedOutput, pigLatin.translate(testWord));
    }

    @Test
    public void wordStartsWithConsonantTest() {
        String testWord = "bird";
        String expectedOutput = "irdbay";
        PigLatin pigLatin = new PigLatin();
        assertEquals(expectedOutput, pigLatin.translate(testWord));
    }

    @Test
    public void phraseTest() {
        String testPhrase = "a yellow bird";
        String expectedOutput = "aay ellowyay irdbay";
        PigLatin pigLatin = new PigLatin();
        assertEquals(expectedOutput, pigLatin.translate(testPhrase));
    }

    @Test
    public void consonantClusterTest() {
        String testWord = "chair";
        String expectedOutput = "airchay";
        PigLatin pigLatin = new PigLatin();
        assertEquals(expectedOutput, pigLatin.translate(testWord));
    }
}
