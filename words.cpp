#include <iostream>
#include <string>
#include <vector>

using namespace std;

int main()
{
    int n;
    cin>>n;
    vector <string> w(n);
    
    for(int i=0; i<n; i++){
        cin>>w[i];
    }
    
    for(int i=0; i<n; i++){
        if(w[i].size()>10){
                cout<<w[i][0]<<w[i].size()-2<<w[i][w[i].size()-1]<<endl;
            
        }
        else{
            cout<<w[i]<<endl;
        }
    }
    
    
    
    return 0;
}