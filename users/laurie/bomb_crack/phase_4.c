#include <stdio.h>

int func4(int param_1)
{
	int iVar1;
	int iVar2;

	if (param_1 < 2)
	{
		iVar2 = 1;
	}
	else
	{
		iVar1 = func4(param_1 + -1);
		iVar2 = func4(param_1 + -2);
		iVar2 = iVar2 + iVar1;
	}
	return iVar2;
	//  need => 55
}

int main(int ac, char **av) {
	int i = 0;

	while (func4(i) != 55) {
		printf("phase_4 test with %d\n", i);
		i++;
	}
	printf("\nfunc4(i) == 55 with i => %d\n", i);
}