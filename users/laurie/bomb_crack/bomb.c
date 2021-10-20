
void initialize_bomb(void)

{
	signal(2, sig_handler);
	return;
}

undefined1 *read_line(void)

{
	char cVar1;
	char *pcVar2;
	int iVar3;
	uint uVar4;

	pcVar2 = skip();
	if (pcVar2 == (char *)0x0)
	{
		if (infile != stdin)
		{
			pcVar2 = getenv("GRADE_BOMB");
			if (pcVar2 != (char *)0x0)
			{
				/* WARNING: Subroutine does not return */
				exit(0);
			}
			infile = stdin;
			pcVar2 = skip();
			if (pcVar2 != (char *)0x0)
				goto LAB_0804925f;
		}
		printf("Error: Premature EOF on stdin\n");
		explode_bomb();
	}
LAB_0804925f:
	uVar4 = 0xffffffff;
	pcVar2 = input_strings + num_input_strings * 0x50;
	do
	{
		if (uVar4 == 0)
			break;
		uVar4 = uVar4 - 1;
		cVar1 = *pcVar2;
		pcVar2 = pcVar2 + 1;
	} while (cVar1 != '\0');
	if (~uVar4 == 0x50)
	{
		printf("Error: Input line too long\n");
		explode_bomb();
	}
	iVar3 = num_input_strings * 0x50;
	*(undefined *)(~uVar4 + 0x804b67e + iVar3) = 0;
	num_input_strings = num_input_strings + 1;
	return input_strings + iVar3;
}

void read_six_numbers(char *param_1,int param_2)

{
  int iVar1;
  
  iVar1 = sscanf(param_1,"%d %d %d %d %d %d",param_2,param_2 + 4,param_2 + 8,param_2 + 0xc,
                 param_2 + 0x10,param_2 + 0x14);
  if (iVar1 < 6) {
    explode_bomb();
  }
  return;
}

void phase_defused(void)

{
	int iVar1;
	undefined local_58[4];
	char local_54[80];

	if (num_input_strings == 6)
	{
		iVar1 = sscanf(input_strings + 0xf0, "%d %s", local_58, local_54);
		if (iVar1 == 2)
		{
			iVar1 = strings_not_equal(local_54, "austinpowers");
			if (iVar1 == 0)
			{
				printf("Curses, you\'ve found the secret phase!\n");
				printf("But finding it and solving it are quite different...\n");
				secret_phase();
			}
		}
		printf("Congratulations! You\'ve defused the bomb!\n");
	}
	return;
}

void phase_1(char *param_1)

{
	int iVar1;

	iVar1 = strings_not_equal(param_1, "Public speaking is very easy.");
	if (iVar1 != 0)
	{
		explode_bomb();
	}
	return;
}

void phase_2(char *param_1)

{
	int iVar1;
	int aiStack32[7];

	read_six_numbers(param_1, (int)(aiStack32 + 1));
	if (aiStack32[1] != 1)
	{
		explode_bomb();
	}
	iVar1 = 1;
	do
	{
		if (aiStack32[iVar1 + 1] != (iVar1 + 1) * aiStack32[iVar1])
		// tab = ... | 1 | 2 | 6 | 24 | 120 | 720 
		1 2 6 88 8096 65585696
		// i == 1
		// tab[i + 1] 		== 	  tab[i] 		* 	(i + 1)
		// 		2  			==  	1			* 	(1 + 1)
		// 		6			==		2			*	(2 + 1) 
		// 		24			==		6			*	(3 + 1) 
		// 		120			==		24			*	(4 + 1)
		// 		720			==		120			*	(5 + 1)
		{
			explode_bomb();
		}
		iVar1 = iVar1 + 1;
	} while (iVar1 < 6);
	return;
}

void phase_3(char *param_1)

{
	int iVar1;
	char cVar2;
	uint local_10;
	char local_9;
	int local_8;

	iVar1 = sscanf(param_1, "%d %c %d", &local_10, &local_9, &local_8);
	if (iVar1 < 3)
	{
		explode_bomb();
	}
	switch (local_10)
	{
	case 0:
		cVar2 = 'q';
		if (local_8 != 0x309)
		{
			explode_bomb();
		}
		break;
	case 1:
		cVar2 = 'b';
		if (local_8 != 0xd6)
		{
			explode_bomb();
		}
		break;
	case 2:
		cVar2 = 'b';
		if (local_8 != 0x2f3)
		{
			explode_bomb();
		}
		break;
	case 3:
		cVar2 = 'k';
		if (local_8 != 0xfb)
		{
			explode_bomb();
		}
		break;
	case 4:
		cVar2 = 'o';
		if (local_8 != 0xa0)
		{
			explode_bomb();
		}
		break;
	case 5:
		cVar2 = 't';
		if (local_8 != 0x1ca)
		{
			explode_bomb();
		}
		break;
	case 6:
		cVar2 = 'v';
		if (local_8 != 0x30c)
		{
			explode_bomb();
		}
		break;
	case 7:
		cVar2 = 'b';
		if (local_8 != 0x20c)
		{
			explode_bomb();
		}
		break;
	default:
		cVar2 = 'x';
		explode_bomb();
	}
	if (cVar2 != local_9)
	{
		explode_bomb();
	}
	return;
}

int func4(int param_1)
//	test param = 2
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
		// x  = func4(param_1 + -1);
		iVar2 = func4(param_1 + -2);
		// y  = func4(param_1 + -2);

		iVar2 = iVar2 + iVar1;
		
		// y =  func4(param_1 + -2)	+ func4(param_1 + -1)
		// y  = y + x
	}
	return iVar2;
	//  => 55
}

void phase_4(char *param_1)

{
	int iVar1;
	int local_8;

	iVar1 = sscanf(param_1, "%d", &local_8);
	if ((iVar1 != 1) || (local_8 < 1))
	{
		explode_bomb();
	}
	iVar1 = func4(local_8);
	if (iVar1 != 0x37)
	{
		explode_bomb();
	}
	return;
}

void phase_5(char *param_1)

{
	int iVar1;
	char local_c[6];
	undefined local_6;

	iVar1 = string_length(param_1);
	if (iVar1 != 6)
	{
		explode_bomb();
	}
	iVar1 = 0;
	do
	{
		//array.123 -> variable global
		local_c[iVar1] = (&array.123)[(char)(param_1[iVar1] & 0xf)];
		iVar1 = iVar1 + 1;
	} while (iVar1 < 6);
	local_6 = 0;
	iVar1 = strings_not_equal(local_c, "giants");
	if (iVar1 != 0)
	{
		explode_bomb();
	}
	return;
}



void phase_6(char *param_1)

{
	int *piVar1;
	int iVar2;
	int *piVar3;
	int iVar4;
	undefined1 *local_38;
	int *local_34[6];
	int local_1c[6];

	local_38 = node1;
	read_six_numbers(param_1, (int)local_1c);
	iVar4 = 0;
	do
	{
		if (5 < local_1c[iVar4] - 1U)
		{
			explode_bomb();
		}
		iVar2 = iVar4 + 1;
		if (iVar2 < 6)
		{
			do
			{
				if (local_1c[iVar4] == local_1c[iVar2])
				{
					explode_bomb();
				}
				iVar2 = iVar2 + 1;
			} while (iVar2 < 6);
		}
		iVar4 = iVar4 + 1;
	} while (iVar4 < 6);
	
	iVar4 = 0;
	do
	{
		iVar2 = 1;
		piVar3 = (int *)local_38;
		if (1 < local_1c[iVar4])
		{
			do
			{
				piVar3 = (int *)piVar3[2];
				iVar2 = iVar2 + 1;
			} while (iVar2 < local_1c[iVar4]);
		}
		local_34[iVar4] = piVar3;
		iVar4 = iVar4 + 1;
	} while (iVar4 < 6);
	
	iVar4 = 1;
	piVar3 = local_34[0];
	do
	{
		piVar1 = local_34[iVar4];
		piVar3[2] = (int)piVar1;
		iVar4 = iVar4 + 1;
		piVar3 = piVar1;
	} while (iVar4 < 6);
	piVar1[2] = 0;
	iVar4 = 0;
	do
	{
		if (*local_34[0] < *(int *)local_34[0][2])
		{
			explode_bomb();
		}
		local_34[0] = (int *)local_34[0][2];
		iVar4 = iVar4 + 1;
	} while (iVar4 < 5);
	return;
}

void secret_phase(void)

{
	undefined1 *puVar1;
	int iVar2;

	puVar1 = read_line();
	iVar2 = __strtol_internal(puVar1, 0, 10, 0);
	if (1000 < iVar2 - 1U)
	{
		explode_bomb();
	}
	iVar2 = fun7((int *)n1, iVar2);
	if (iVar2 != 7)
	{
		explode_bomb();
	}
	printf("Wow! You\'ve defused the secret stage!\n");
	phase_defused();
	return;
}

int main(int argc, char **argv)

{
	char *pcVar1;
	int in_stack_00000004;
	undefined4 *in_stack_00000008;

	if (in_stack_00000004 == 1)
	{
		infile = stdin;
	}
	else
	{
		if (in_stack_00000004 != 2)
		{
			printf("Usage: %s [<input_file>]\n", *in_stack_00000008);
			/* WARNING: Subroutine does not return */
			exit(8);
		}
		infile = (_IO_FILE *)fopen((char *)in_stack_00000008[1], "r");
		if (infile == (_IO_FILE *)0x0)
		{
			printf("%s: Error: Couldn\'t open %s\n", *in_stack_00000008, in_stack_00000008[1]);
			/* WARNING: Subroutine does not return */
			exit(8);
		}
	}
	initialize_bomb();
	printf("Welcome this is my little bomb !!!! You have 6 stages with\n");
	printf("only one life good luck !! Have a nice day!\n");
	pcVar1 = read_line();
	phase_1(pcVar1);
	phase_defused();
	printf("Phase 1 defused. How about the next one?\n");
	pcVar1 = read_line();
	phase_2(pcVar1);
	phase_defused();
	printf("That\'s number 2.  Keep going!\n");
	pcVar1 = read_line();
	phase_3(pcVar1);
	phase_defused();
	printf("Halfway there!\n");
	pcVar1 = read_line();
	phase_4(pcVar1);
	phase_defused();
	printf("So you got that one.  Try this one.\n");
	pcVar1 = read_line();
	phase_5(pcVar1);
	phase_defused();
	printf("Good work!  On to the next...\n");
	pcVar1 = read_line();
	phase_6(pcVar1);
	phase_defused();
	return 0;
}