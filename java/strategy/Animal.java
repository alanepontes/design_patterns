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
public class Animal {
    private BehaviorFly behaviorFly;
    
    public void setBehaviorFly(BehaviorFly behaviorFly) { this.behaviorFly = behaviorFly; }
    public String tryToFly() { return this.behaviorFly.fly(); }
}
