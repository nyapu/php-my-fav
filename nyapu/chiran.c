#include <stdio.h>
int main()
{
#include <stdio.h>
    int main()
    {
        int m1[5][5], m2[5][5], m3[5][5], r, c, sum = 0;
        printf("enter first matrix:");
        for (r = 0; r < 3; r++)
        {
            for (c = 0; c < 3; c++)
            {
                scanf("%d", &m1[r][c]);
            }
        }
        printf("enter second matrix:");
        for (r = 0; r < 3; r++)
        {
            for (c = 0; c < 2; c++)
            {
                scanf("%d", m2[r][c]);
            }
        }
        printf("first matrix is:");
        for (r = 0; r < 3; r++)
        {
            for (c = 0; c < 3; c++)
            {
                printf("%d", m1[r][c]);
            }
        }
        printf("second matrix :");
        
        for (r = 0; r < 3; r++)
        {
            for (c = 0; c < 2; c++)
            {
                printf("%d", m2[r][c]);
            }
        }

        return 0;
    }
