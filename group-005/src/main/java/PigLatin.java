import java.util.Arrays;
import java.util.List;

/**
 * Created by tweinreich on 11.10.16.
 */
public class PigLatin {
    /**
     * Helps the translate-Method to replace given words with their pig latin translation.
     *
     * @param inputString   The word that shall be replaced with its pig latin equivalent
     * @return String       The replaced word
     */
    public String replace(String inputString) {

        // Refactored because I was asked if Java could also
        // create and instantiate lists in one line ;-)
        String lowercaseInputString = inputString.toLowerCase();
        List<String> vowelsList = Arrays.asList("a", "e", "i", "o", "u");
        List<String> consonantTripleClusterList = Arrays.asList("thr", "sch");
        List<String> consonantDoubleCLusterList = Arrays.asList("ch", "th", "qu");

        int inputLength = lowercaseInputString.length();

        if(inputLength > 2 && consonantTripleClusterList.contains(lowercaseInputString.substring(0, 3))) {
            return lowercaseInputString.substring(3) + lowercaseInputString.substring(0, 3) + "ay";
        }

        if(inputLength > 1 && consonantDoubleCLusterList.contains(lowercaseInputString.substring(0,2))) {
            return lowercaseInputString.substring(2) + lowercaseInputString.substring(0, 2) + "ay";
        }

        if(vowelsList.contains(lowercaseInputString.substring(0, 1))) {
            return lowercaseInputString + "ay";
        } else {
            return lowercaseInputString.substring(1) + lowercaseInputString.substring(0, 1) + "ay";
        }
    }

    /**
     * Translates a given sentence into pig latin.
     *
     * @param inputPhrase   Sentence to translate into pig latin
     * @return String       The sentence translated into pig latin
     */
    public String translate(String inputPhrase) {
        String splittedInputArray[] = inputPhrase.split(" ");
        StringBuilder stringBuilder = new StringBuilder();
        for(String word : splittedInputArray) {
            String convertedWord = replace(word);
            stringBuilder.append(convertedWord + " ");
        }
        return stringBuilder.toString().trim();
    }

}
