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
public class CantFly implements BehaviorFly{

    @Override
    public String fly() {
        return "Can't fly";
    }
    
}
