package ArrayList;

import java.util.HashMap;

public class MyClass2 {
    // Hash maps are just like assoc arrays in php
    // It makes use of key/value pair
    // To use HashMap array import the class for HashMaps

    public static void main(String[] args) {
        HashMap<String, String> TownCities = new HashMap<String, String>();
        TownCities.put("NRB","NAIROBI");
        TownCities.put("MKS","MACHAKOS");
        TownCities.put("NRK","NAROK");
        TownCities.put("KSM","KISUMU");
        System.out.println(TownCities);




        // Looping: Use for each
        // Use 'keyset()' method to access the keys
        // Use 'values()' to access values

        for(String x :TownCities.keySet()){
            System.out.println(x);
        }

        //looping through values
        for (String y :TownCities.keySet()){
            System.out.println("Keys:" + y + "values" + TownCities.get(y));
        }
    }
}
