/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package patterns;

/**
 *
 * @author alane
 */
public class AnimalPlay {

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        Animal mickey = new Dog();
        Animal clara = new Bird();
        
        System.out.println(mickey.tryToFly());
        System.out.println(clara.tryToFly());
    }
    
}
