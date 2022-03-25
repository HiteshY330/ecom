package WebBrowser;

import javax.swing.*;
import javafx.embed.swing.JFXPanel;

public class WebBrowser extends JFrame {
    private JFXPanel panel;
    WebBrowser(){
    	setTitle("search");
    	setBounds(0,0,1950,1950);
    	setVisible(true);
    }
    public static void main(String[] args){
    	new WebBrowser();
    }
}
