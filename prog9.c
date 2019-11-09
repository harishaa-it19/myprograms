#include <stdio.h>

int main() {
      char a[14];
      gets(a);
      for (int j=0;j<14;j++)
      {
              printf("%c[%d]=%p\n",a[j],j,&a[j]);
      }
      
}
