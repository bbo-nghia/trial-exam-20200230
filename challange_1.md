import java.util.Arrays;
public class Solution{

     public static void main(String []args){
        
        int[] sticks = new int[]{1,8,3,5};
        System.out.println(connectSticks(sticks));
     }
    
     
    public static int connectSticks(int[] sticks) {
        int sum = 0;
        int oldResult = sticks[0];
        int result = 0;
        
        Arrays.sort(sticks);
        
         for (int i = 1; i < sticks.length; i++) {
            sum = oldResult + sticks[i];
            oldResult = sum;
            result += sum;
         }
        
        return result;
    }
}