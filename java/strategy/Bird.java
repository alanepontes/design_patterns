package patterns;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 *
 * @author alane
 */
public class Bird extends Animal{
    
    public Bird() {
        super();
        setBehaviorFly(new ItFly());
        
    }
    
}
